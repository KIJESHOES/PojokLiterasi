<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages;
use App\Filament\Resources\ArticleResource\RelationManagers;
use App\Models\Article;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Actions;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\BulkActionGroup;
use Illuminate\Http\Request;
use Filament\Forms\Components\FileUpload;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Facades\Storage;
use Filament\Tables\Columns\IconColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Judul')
                    ->placeholder('Masukkan judul artikel')
                    ->required(),
                TextInput::make('content')
                    ->label('Konten')
                    ->placeholder('Masukkan konten artikel')
                    ->required(),
                TextInput::make('author')
                    ->label('Penulis')
                    ->placeholder('Masukkan nama penulis')
                    ->required(),
                FileUpload::make('pdf')
                    ->label('PDF File')
                    ->disk('public') // sesuai disk yang kamu pakai
                    ->directory('articles-pdf') // folder penyimpanan
                    ->acceptedFileTypes(['application/pdf'])
                    ->maxSize(10240), // dalam KB, contoh 10MB
                Select::make('category_id')
                    ->label('Kategori')
                    ->required()
                    ->placeholder('Pilih kategori artikel')
                    ->options(Category::pluck('name', 'id'))
                    ->searchable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table

            ->columns([
                TextColumn::make('title')->label('Judul')
                    ->searchable()
                    ->limit(50)
                    ->wrap(),
                TextColumn::make('content')->label('Kontent')
                    ->limit(50)
                    ->wrap(),
                TextColumn::make('author')->label('Penulis')
                    ->limit(50)
                    ->wrap(),
                IconColumn::make('pdf')
                    ->label('PDF')
                    ->boolean(fn ($record) => !empty($record->pdf))
                    ->url(fn ($record) => Storage::disk('public')->url($record->pdf))
                    ->openUrlInNewTab(),
                TextColumn::make('category.name')->label('Kategori')
                        ->label('Kategori')
                        ->searchable(),
            ])
            ->filters([
                SelectFilter::make('category_id')
                    ->label('Kategori')
                    ->relationship('category', 'name') // Otomatis ambil nama kategori
            ])

            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
            'view' => Pages\ViewArticle::route('/{record}'),
        ];
    }
}

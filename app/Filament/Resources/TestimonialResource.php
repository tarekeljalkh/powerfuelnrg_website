<?php
namespace App\Filament\Resources;

use App\Filament\Resources\TestimonialResource\Pages;
use App\Models\Testimonial;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class TestimonialResource extends Resource
{
    protected static ?string $model = Testimonial::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group'; // For testimonials (people icon)
    protected static ?int $navigationSort = 9;

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                TextInput::make('client_name')
                    ->label('Client Name')
                    ->required(),

                TextInput::make('client_role')
                    ->label('Client Role')
                    ->required(),

                FileUpload::make('client_image')
                    ->label('Client Image')
                    ->directory('testimonials')
                    ->image()
                    ->required(),

                Textarea::make('testimonial')
                    ->label('Testimonial')
                    ->rows(4)
                    ->required(),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                ImageColumn::make('client_image')->label('Image')->size(60),
                TextColumn::make('client_name')->label('Name')->searchable(),
                TextColumn::make('client_role')->label('Role'),
                TextColumn::make('testimonial')->label('Testimonial')->limit(50),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTestimonials::route('/'),
            'create' => Pages\CreateTestimonial::route('/create'),
            'edit' => Pages\EditTestimonial::route('/{record}/edit'),
        ];
    }
}

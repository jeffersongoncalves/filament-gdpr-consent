<?php

namespace JeffersonGoncalves\Filament\GdprConsent\Resources\ConsentRecords\Pages;

use Filament\Resources\Pages\ListRecords;
use JeffersonGoncalves\Filament\GdprConsent\Resources\ConsentRecords\ConsentRecordResource;

class ListConsentRecords extends ListRecords
{
    protected static string $resource = ConsentRecordResource::class;
}

<?php

use App\Http\Controllers\QuoteRequestController;

Route::get('/latest-quote-requests', [QuoteRequestController::class, 'getLatestQuotes']); 
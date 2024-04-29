<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

   public function render($request, Throwable $e)
{
    if ($this->isHttpException($e)) {
        $statusCode = $e->getStatusCode();
        $errorMessage = '';

        switch ($statusCode) {
            case 404:
                $errorMessage = 'Az oldal nem található';
                break;
            case 403:
                $errorMessage = 'Nincs elég jogosultságod';
                break;
            default:
                $errorMessage = 'Hiba történt';
                break;
        }

        return response()->view('hiba.404', [
            'errorCode' => $statusCode,
            'errorMessage' => $errorMessage,
        ], $statusCode);
    }

    return parent::render($request, $e);
}
    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
}

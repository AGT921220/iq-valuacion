<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {

        //        dd($exception);
        //Symfony\Component\HttpKernel\Exception\NotFoundHttpException
        switch (get_class($exception)) {
            case 'Illuminate\Auth\Access\AuthorizationException':
                return redirect('/home')->with('error', $exception->getMessage());
                break;

            case 'Illuminate\Database\Eloquent\ModelNotFoundException':
            case 'Symfony\Component\HttpKernel\Exception\NotFoundHttpException':
                return back()->with('error', 'No existe el recurso');
                break;



            default:
            return parent::render($request, $exception);

                return back()->with('error', 'No existe el recurso o la ruta');
                break;
        }


        return parent::render($request, $exception);
    }
}

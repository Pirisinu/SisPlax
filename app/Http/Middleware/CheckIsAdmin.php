<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckIsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        // Verifica se l'utente è un amministratore
        if ($request->user() && $request->user()->isAdmin) {
            return $next($request);
        }

        // Se l'utente non è un amministratore, reindirizza o genera un errore 403
        return abort(403, 'Unauthorized');
    }
}


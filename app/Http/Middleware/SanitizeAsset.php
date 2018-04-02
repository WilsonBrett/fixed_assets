<?php

namespace App\Http\Middleware;

use Closure;

class SanitizeAsset
{
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		$inputs = [];
		$inputs['amount'] = (float)number_format(str_replace(',', '', $request->amount), 4, '.', '');
		$inputs['purchase_date'] = date_create($request->purchase_date)->format('Y-m-d');
		$inputs['service_start_date'] = date_create($request->service_start_date)->format('Y-m-d');
		$inputs['expiration_date'] = date_create($request->expiration_date)->format('Y-m-d');
		$request->merge($inputs);
		return $next($request);
	}
}

@extends('base.header')
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/admin') }}">Admin</a>
                    @else
                        <a href="/admin">Login</a> |
                    @endauth
                </div>
            @endif
@extends('base.base')

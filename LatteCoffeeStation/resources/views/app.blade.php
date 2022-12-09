<!DOCTYPE html>
<html lang="pt-br">
    @include('includes.head')
    <body>
        @includeUnless(!empty($hideHeader), 'includes.header')
        <main class="d-flex">
            <div>
                @yield('conteudo')
            </div>
        </main>
        @includeUnless(!empty($hideHeader), 'includes.footer')
        {{-- <script src="{{mix('js/app.js')}}"></script>
        @stack('scripts') --}}
    </body>
</html>
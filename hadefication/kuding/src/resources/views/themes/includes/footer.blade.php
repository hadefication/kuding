<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <p class="text-muted">Copyright &copy; <a href="{{ route('kuding.cpanel') }}">{{ config('app.name') }}</a>. All Rights Reserved. Powered by <strong>Kuding</strong>.</p>
            </div>
            <div class="col-md-5">
                <p class="text-right">
                    <a href="#">fb</a>
                    <a href="#">tw</a>
                    <a href="#">in</a>
                </p>
            </div>
        </div>
    </div>
</footer>

@include('kuding::themes.includes.scripts')

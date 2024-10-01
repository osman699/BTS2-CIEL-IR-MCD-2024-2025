<nav class="bg-hextech-black navbar navbar-expand-lg flex-column">
    <div class="container-fluid ">
        <a class="navbar-brand text-gold-1 h1" href="{{ url('/') }}">{{ config('app.name', 'LoB') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center flex-column" id="navbarNav">
            <div class="my-3">
                <div class="d-block d-lg-none">
                    <x-decorator-hr />
                </div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link h4 link-underline-opacity-100-hover link-offset-3" href="">ITEM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link h4 link-underline-opacity-100-hover link-offset-3" href="">ITEM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link h4 link-underline-opacity-100-hover link-offset-3" href="">ITEM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link h4 link-underline-opacity-100-hover link-offset-3" href="">ITEM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link h4 link-underline-opacity-100-hover link-offset-3" href="">ITEM</a>
                    </li>
                </ul>
                <div class="d-block d-lg-none">
                    <x-decorator-hr />
                </div>
            </div>
            <div class="d-none d-lg-block">
                <x-decorator-hr />
            </div>
        </div>
    </div>
</nav>

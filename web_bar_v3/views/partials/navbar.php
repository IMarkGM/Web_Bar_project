<header>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-transparent">
        <div class="container-fluid">
        <a class="navbar-brand" href="./"><i class="bi bi-cup-straw"></i> Barhamut</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./">Főoldal</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Kategóriák
                </a>
                <ul class="dropdown-menu dropdown-menu-dark bg-black" aria-labelledby="navbarDropdown">
                <form method="POST" action="products">
                <li><button class="dropdown-item" name="category_index" value="1"><i class="bi bi-droplet-half"></i> Alkoholos Italok</button></li>
                <li><button class="dropdown-item" name="category_index" value="0"><i class="bi bi-droplet"></i> Alkohol Mentes Italok</button></li>
                <li><button class="dropdown-item" name="category_index" value="2"><i class="bi bi-snow"></i> Hideg Italok</button></li>
                <li><button class="dropdown-item" name="category_index" value="3"><i class="bi bi-cup-hot"></i> Meleg Italok</button></li>
                <li><hr class="dropdown-divider-light"></li>
                <li><button class="dropdown-item" name="category_index" value="4"><i class="bi bi-minecart-loaded"></i> Rágcsák</button></li>
                <li><button class="dropdown-item" name="category_index" value="5"><i class="bi bi-egg-fried"></i> Ételek</button></li>
                </ul>
                </form>
            </li>
            </ul>
        </div>
        </div>
    </nav>
</header>
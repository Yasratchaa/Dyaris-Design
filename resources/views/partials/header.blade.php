<nav class="navbar">
    <a><img class="logo" src="{{ asset('img/banner_dyaris.png') }}" /></a>
    <ul class="nav-items">
        <li>
            <a class="{{ $title === 'Discovery' ? 'menus' : 'menu' }}" href="/">Discovery</a>
        </li>
        <li>
            <a class="{{ $title === 'Order' ? 'menus' : 'menu' }}" href="/service">Order</a>
        </li>
        <li>
            <a id="about-us-link" class="{{ $title === 'About Us' ? 'menus' : 'menu' }}" href="#about-us">About Us</a>
        </li>
    </ul>
</nav>

<script>
    document.getElementById('about-us-link').addEventListener('click', function(event) {
        if (window.location.pathname !== '/') {
            event.preventDefault();
            window.location.href = '/#about-us';
        }
    });
</script>

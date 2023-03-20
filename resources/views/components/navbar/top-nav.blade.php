<div class="nav-container">
    @if ($userInfo  == 1)
        <a class="">All Todos</a>
        <a class="">Register Todo</a>
        <a class="">My Account</a>
    @else
        <a href="/login" class="">Log in</a>
        <a href="/registration" class="">Registration</a>
    @endif
</div>

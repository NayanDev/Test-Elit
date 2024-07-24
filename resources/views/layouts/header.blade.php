<div class="row border-bottom">
    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i
                    class="fa fa-bars"></i> </a>
        </div>
        <ul class="nav navbar-top-links navbar-right border-none">
            <li>
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-w-m btn-link m-t-sm">
                        <i class="fa fa-sign-out"></i> Log out
                    </button>
                </form>
            </li>
        </ul>

    </nav>
</div>
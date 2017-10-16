<div class="pre-header-advertisement">
    <p class="pre-nav">
        <i class="icon mail-icon">email</i>example@example.com
    </p>
    <p class="pre-nav">
        <i class="icon phone-icon">phone</i>06-04-00-00
    </p>
    @if(Auth::guest())
         <p class="pre-nav">
            <a href="/register">Register</a>
        </p>
         <p class="pre-nav">
            <a href="/login">Log in</a>
        </p>
    @endif
    @if(Auth::check())
        <p class="pre-nav">
             <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fa fa-fw fa-power-off"></i> Log Out
            </a>
        </p>
        <form id="logout-form" action="/logout" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    @endif
        <p class="pre-nav float-right">
            <a href="">
                <i class="icon facebook-icon">facebook</i>Suivez nous
            </a>
        </p>
</div>

<div class="clearfix" style="clear:both;"></div>
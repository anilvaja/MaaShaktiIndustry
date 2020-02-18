<div class="col-md-3">
    <div class="card">
        <div class="card-header">
            Sidebar
        </div>

        <div class="card-body">
            <ul class="nav" role="tablist">
                <li role="presentation">
                    <a href="{{ url('/admin') }}">
                        Dashboard
                    </a>
                    @foreach ($main_menu as $item)
                    <br/>
                    <a href="{{ url($item->url) }}">
                    {{$item->title}}</a>
                @endforeach

                </li>
                
            </ul>
        </div>
    </div>
</div>

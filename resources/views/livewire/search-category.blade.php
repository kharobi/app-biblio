<div>
    <div class="container-bar">
        <div class="search-bar">

            <div id="select">
                <!-- <img src="drag_drop_icon.png"> -->

                <p id="selectText">جميع الإختصاصات</p>
                <ul id="list">
                    <li class="options">جميع الإختصاصات</li>
                    @foreach ($cats as $cat)
                    <li class="options">{{ $cat->libelle_cat}}</li>
                    @endforeach

                </ul>

            </div>
            <input id="search-text" placeholder="البحث في جميع الإختصاصات" wire:model.live="query"  type="search">

        </div>
        <div id="resultSerch">
            <div class="resultvide"></div>
            <div id="resulet-text">
                <ul>
                    
                    <li>resulta1</li>
                    <li>resulta2</li>
    
                </ul>
            </div>
    </div>
        
    </div>

</div>

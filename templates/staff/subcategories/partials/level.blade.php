    <ul>
        @foreach($subcategories as $subcategory)
            <li  data-jstree='{ "opened" : true }'>{{ $subcategory->name }}
                @if( !empty($subcategory->childs) )            
                    @include ('staff.subcategories.partials.level',['subcategories' => $subcategory->childs])
                @endif
            </li>        
        @endforeach
    </ul>
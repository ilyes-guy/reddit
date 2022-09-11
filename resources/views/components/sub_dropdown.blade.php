<div id="subs_menu" class="absolute  mt-2  hidden z-10 w-44 bg-secondary rounded divide-y divide-gray-100 shadow">
    <div class="py-3 px-4 text-sm text-gray-900 ">
      <div>Bonnie Green</div>
      <div class="font-medium truncate">name@flowbite.com</div>
    </div>
    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownInformationButton">
      
        @if (json_decode($subs))
            @foreach (json_decode($subs) as $item)
                <li>
                    <a href="#" class="block py-2 px-4 hover:bg-gray-100  ">{{$item}}</a>
                </li>
            @endforeach
        @else
        <li>
            <a href="#" class="block py-2 px-4 hover:bg-gray-100  ">you have no subs</a>
        </li>
        @endif


      
    </ul>
    <div class="py-1">
      <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 ">Sign out</a>
    </div>
  </div>
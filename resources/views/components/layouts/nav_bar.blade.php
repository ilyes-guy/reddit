
<nav class="px-4 bg-main  border-b flex flex-row items-center justify-between sticky top-0 z-50">
  <div class='flex flex-row items-center space-x-2'>

    <a href="{{URL('/')}}"><x-nav_icon /></a>
    <button id='add_post_nav' class=' items-center p-2 h-10 rounded-lg bg-secondary border  '><x-bi-cloud-plus /></button>
    <div class=''>
      <button id='toggle_subs_menu' class='flex  flex-row justify-between  items-center p-2 h-10 rounded-lg bg-secondary border  w-full'><x-bi-house-fill />      <x-bi-chevron-down /></button>
      <x-sub_dropdown :subs="Auth::user()->my_subs"/>
      
    </div>

    <div id='add_post_input'>
      <input id='' placeholder='search' class='p-2 h-10  rounded-lg bg-secondary border  w-full' type="text">
    </div>

  </div>


  <div class=''>
    @if (Auth::user())
    <div id='toggle_user_menu' class='cursor-pointer flex  flex-row justify-between  items-center p-2 h-10 rounded-lg bg-secondary border  w-full '>
      <p >{{Auth::user()->username}}</p> 
      <x-bi-chevron-down />
    </div>
    <x-user_dropdown  />

      
    @else
      epiorgjqeoirgjeq^ro
    @endif
  </div>



</nav>

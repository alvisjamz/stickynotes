@if(session()->has('delete'))
<div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show"
  class="fixed top-0 left-1/2 transform -translate-x-1/2 text-white px-48 py-3 bg-red-500 rounded">
  <p>
    {{session('delete')}}
  </p>
</div>
@endif

@if(session()->has('success'))
<div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show"
  class="fixed top-0 left-1/2 transform -translate-x-1/2 text-white px-48 py-3 bg-green-500 rounded">
  <p>
    {{session('success')}}
  </p>
</div>
@endif

@if(session()->has('create'))
<div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show"
  class="fixed top-0 left-1/2 transform -translate-x-1/2  text-white px-48 py-3 bg-green-500 rounded">
  <p>
    {{session('create')}}
  </p>
</div>
@endif

@if(session()->has('logged'))
<div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show"
  class="fixed top-0 left-1/2 transform -translate-x-1/2  text-white px-48 py-3 bg-red-500 rounded">
  <p>
    {{session('logged')}}
  </p>
</div>
@endif

@if(session()->has('login'))
<div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show"
  class="fixed top-0 left-1/2 transform -translate-x-1/2  text-white px-48 py-3 bg-green-500 rounded">
  <p>
    {{session('login')}}
  </p>
</div>
@endif


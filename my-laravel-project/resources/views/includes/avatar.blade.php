<!-- la imagen se puede redimensionar, es un tema de optimizacion -->
@if(Auth::user()->image)
<div class="container-avatar">
    <img src="{{ route('user.avatar', ['filename' => Auth::user()->image]) }}" alt="avatar" class="avatar">
</div>
@endif
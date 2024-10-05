@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{ asset('img/logo.png') }}" alt="INeedABabyssiter" height="100" width="106"/>
@else
{{ $slot }}
@endif
</a>
</td>
</tr>

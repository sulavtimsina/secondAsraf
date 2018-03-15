<tr>
    <td>
        <a href="{{$url or url('/')}}">
            <img  src="{{Asset::getUrl('asraf/img/email-header.png')}}"/>
        </a>
    </td>
</tr>
<tr>
    <td style="padding-left:5px; line-height: 25px; width:600px; background: black; text-transform: uppercase; color: white; font-size: 13px; font-family: Arial, Helvetica, sans-serif;">
        {{ $slot }}
    </td>
</tr>
<tr>
    <td style="line-height: 5px;">
        &nbsp;
    </td>
</tr>
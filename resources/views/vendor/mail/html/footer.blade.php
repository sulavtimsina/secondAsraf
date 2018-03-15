<tr>
    <td style="line-height: 5px;">
        &nbsp;
    </td>
</tr>
<tr class="footer">
    <td style="background-color: #333333;">
        <table style="width: 100%; padding: 10px; color: white; font-size: 13px; font-family: Arial, Helvetica, sans-serif;">
            <tr>
                <td style="width: 48%; padding-top:10px; padding-left:20px;">
                    <a href="https://www.astate.edu">
                        <img alt="astate-logo.png" border="0"
                             src="https://www.astate.edu/dotAsset/5f6a8c36-a414-4cd7-9737-045f106406db.png"
                             style="width:150px;" width="150">
                        </img>
                    </a>
                </td>
                <td style="text-align: right;">
                    <table style="width: 100%; color: white; font-size: 13px; font-family: Arial, Helvetica, sans-serif;">
                        <tr>
                            <td>
                                <table style="width: 100%; color: white; font-size: 13px; font-family: Arial, Helvetica, sans-serif;">
                                    <tr>
                                        <td style="width:40%;">
                                        </td>
                                        <td style="width:12%; text-align: right;">
                                            <a href="http://www.facebook.com/ArkansasState" title="Facebook page">
                                                <img alt="facebook icon"
                                                     src="http://www.astate.edu/a/asunews/inside/images/global/icon_facebook.png">
                                                </img>
                                            </a>
                                        </td>
                                        <td style="width:12%; text-align: right;">
                                            <a href="http://www.twitter.com/ArkansasState" title="Twitter page">
                                                <img alt="twitter icon"
                                                     src="http://www.astate.edu/a/asunews/inside/images/global/icon_twitter.png">
                                                </img>
                                            </a>
                                        </td>
                                        <td style="width:12%; text-align: right;">
                                            <a href="http://instagram.com/arkansasstate" title="Instagram page">
                                                <img alt="instagram icon"
                                                     src="http://www.astate.edu/a/asunews/inside/images/global/icon_instagram.png">
                                                </img>
                                            </a>
                                        </td>
                                        <td style="width:12%; text-align: right;">
                                            <a href="http://www.youtube.com/asujonesboro" title="Youtube page">
                                                <img alt="youtube icon"
                                                     src="http://www.astate.edu/a/asunews/inside/images/global/icon_youtube.png">
                                                </img>
                                            </a>
                                        </td>
                                        <td style="width:12%; text-align: right;">
                                            <a href="https://vimeo.com/arkansasstate" title="Vimeo page">
                                                <img alt="vimeo icon"
                                                     src="http://www.astate.edu/a/asunews/inside/images/global/icon_vimeo.png">
                                                </img>
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: right; padding-top:10px;">
                                <strong>
                                    {{ config('asraf.app.title') }}
                                </strong>
                                <br>
                                {{ config('asraf.app.tagline') }}
                                <br>
                                <br>

                                <br>
                                <a href="mailto:{{config('mail.from.address')}}" style="color:white;">
                                    {{config('mail.from.address')}}
                                </a>
                                | {{config('asraf.app.phone')}}
                                </br>
                                </br>
                                </br>
                                </br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center; color: white; font-style:italic; font-size:14px; padding-top:15px;">
                    A-State educates leaders, enhances intellectual growth, and enriches lives.
                    {{ Illuminate\Mail\Markdown::parse($slot) }}
                </td>
            </tr>
        </table>
    </td>
</tr>
<tr>
    <td style="text-align: center;">
        <br>
        <br>
        Contact us at
        <a href="mailto:{{config('asraf.app.email')}}">
            {{config('mail.from.address')}}
        </a>
        <br>
        <br>
        </br>
        </br>
        </br>
        </br>
    </td>
</tr>
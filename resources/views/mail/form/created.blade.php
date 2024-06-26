@component('mail::message')

Hey there 👋

Congrats! Your form "{{$form->title}}" was successfully created!

If you want to share your form, here is the link:

@component('mail::panel')
{{$form->share_url}}
@endcomponent

If you want to embed your form to your website, copy and paste the following code:
@component('mail::panel')
{{ '<iframe style="border:none;width:100%;" id="'.$form->slug.'" src="'.$form->share_url.'"></iframe>
    <script type="text/javascript" onload="initEmbed(\''.$form->slug.'\')" src="'.front_url("widgets/iframe.min.js").'"></script>' }}
@endcomponent

Finally, we created a **Discord channel** with all the other users to share our news and guides about OpnForm.
I would love to see you there, here is the link:

@component('mail::button', ['url' => config('links.discord')])
Discord Channel
@endcomponent

@endcomponent
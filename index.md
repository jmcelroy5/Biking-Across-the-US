---
layout: default
title: "Home"
categories: 
---

{% for post in site.posts %}
### [ {{ post.title }} ]( {{ site.baseurl }}{{ post.url }} )
<p style="color:grey">{{ post.date | date: "%B %d, %Y" }} </p>
{% if post.image-link %}
<img width="500px" src="images/{{ post.image-link }}" style="border: 5px solid black" />
{% endif %}
{% if post.excerpt %}
<article>
{{ post.excerpt }}
</article>
{% endif %}
[Read more]({{ site.baseurl }}{{ post.url }})
<br><br><br><br><br>
{% endfor %}

    <div id="mc_embed_signup" class="grid_4">     
        <form action="http://bikingacross.us3.list-manage.com/subscribe/post?u=bbbe92dadd3ac5ace50a61b31&amp;id=3b65cf9025" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <div class="mc-field-group">
            <label for="mce-EMAIL">
            </label>
            <p style="font-size: 13pt; text-align: center"> Sign up for the mailing list to hear about blog updates! </p><input placeholder="Your email address" type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
            </div>
            <div class="mc-field-group-input-group">
            <ul><li>Email Format:</li><li><input type="radio" value="html" name="EMAILTYPE" id="mce-EMAILTYPE-0"><label for="mce-EMAILTYPE-0">HTML</label></li>
            <li><input type="radio" value="text" name="EMAILTYPE" id="mce-EMAILTYPE-1"><label for="mce-EMAILTYPE-1">Text</label></li>
            </ul>
            </div>
            <div id="mce-responses" class="clear">
            <div class="response" id="mce-error-response" style="display:none"></div>
             <div class="response" id="mce-success-response" style="display:none"></div>
            </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
            <div style="position: absolute; left: -5000px;"><input type="text" name="b_bbbe92dadd3ac5ace50a61b31_3b65cf9025" value=""></div>
             <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
        </form>
    </div>

<script src="mailchimp.js" type="text/javascript">

</script>




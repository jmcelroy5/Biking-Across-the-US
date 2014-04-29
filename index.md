---
layout: default
title: "Home"
categories: 
---

{% for post in site.posts %}
{% if post.image-link %}
<img width="600px" src="images/{{ post.image-link }}" style="border: 5px solid black" />
{% endif %}
{% if post.image-url %}
<img width="600px" src="{{ post.image-url }}" style="border: 5px solid black" />
{% endif %}
### [ {{ post.title }} ]({{ post.url }} )
<p style="color:grey;font-size:1x">{{ post.date | date: "%B %d, %Y" }} </p>
{% if post.excerpt %}
<article>
{{ post.excerpt }}
</article>
{% endif %}
[Read more]({{ post.url }})
<br><br><br><br><br>
{% endfor %}




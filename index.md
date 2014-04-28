---
layout: default
title: "Home"
categories: 
---

{% for post in site.posts %}
{% if post.image-link %}
<img width="575px" src="images/{{ post.image-link }}" style="border: 5px solid black" />
{% endif %}
<span style="color: rgb(32,89,150)">### [ {{ post.title }} ]( {{ site.baseurl }}{{ post.url }} )</span>
<p style="color:grey">{{ post.date | date: "%B %d, %Y" }} </p>
{% if post.excerpt %}
<article>
{{ post.excerpt }}
</article>
{% endif %}
[Read more]({{ site.baseurl }}{{ post.url }})
<br><br><br><br><br>
{% endfor %}




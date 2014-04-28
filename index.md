---
layout: default
title: "Home"
categories: 
---

{% for post in site.posts %}
### [ {{ post.title }} ]( {{ site.baseurl }}{{ post.url }} )
<p style="color:grey">{{ post.date | date: "%B %d, %Y" }} </p>
{% if post.image-link %}
<img width="400px" src="images/{{ post.image-link }}" style="border: 5px solid black" />
{% endif %}
{% if post.excerpt %}
{{ post.excerpt }}
{% endif %}
[Read more]({{ site.baseurl }}{{ post.url }})
<br><br><br><br>
{% endfor %}





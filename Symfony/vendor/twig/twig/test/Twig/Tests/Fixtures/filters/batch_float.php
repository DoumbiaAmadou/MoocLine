--TEST--
"batch" filter
--TEMPLATE--
{% for row in items|batch(3.1) %}
  <div class=row>
  {% for column in row %}
    <div class=item>{{ column }}</div>
  {% endfor %}
  </div>
{% endfor %}
--DATA--
return array('items' => array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j'))
--EXPECT--
<div class=row>
      <div class=item>a</div>
      <div class=item>b</div>
      <div class=item>c</div>
    </div>
  <div class=row>
      <div class=item>d</div>
      <div class=item>e</div>
      <div class=item>f</div>
    </div>
  <div class=row>
      <div class=item>g</div>
      <div class=item>h</div>
      <div class=item>i</div>
    </div>
  <div class=row>
      <div class=item>j</div>
    </div>

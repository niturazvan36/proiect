{% load static %}
<head>
    <meta charset="UTF-8">
    <title>HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{% static 'css/main.css' %}">
</head>
<body>
<nav class="navbar navbar-dark bg-dark">

    {% if user.is_authenticated %}
     <span class="navbar-brand mb-2 h1"><a class="t" href="global">Real-time chat application</a></span>
    <a class="login" href="global">Global chat</a>
{% else %}
<span class="navbar-brand mb-2 h1"><a class="t" href="{% url 'login'%}">Real-time chat application</a></span>
<a class="login" href="{% url 'login'%}">Log in</a>
{%endif%}
</nav>
<br>
<br>
<br>
<div class="wrapper">
   <div class="container d-flex flex-column justify-content-center align-items-center">
    <div class="chart-wrapper">
        <canvas id="myChart"></canvas>
    </div>

</div>

</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.js'></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
  <script src="{% static 'js/script.js' %}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <title>Website | {% block title %}{% endblock %}</title>
        </head>
        <body>
            {% include 'templates/partials/navigation.php' %}
            {% block content %} {% endblock %}
        </body>
    </html>
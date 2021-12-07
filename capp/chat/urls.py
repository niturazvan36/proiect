
from django.urls import path
from . import views
from .views import Room
urlpatterns = [
    path('', views.home,name='home'),
    path('register',views.register, name='register'),
    path('<str:room_name>/', Room.as_view(), name='room'),
]

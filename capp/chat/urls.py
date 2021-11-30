
from django.urls import path
from . import views

urlpatterns = [
    path('', views.home,name='home'),
    path('register',views.register, name='register'),
    path('<str:room_name>/', views.room, name='room'),
]

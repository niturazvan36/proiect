from django.http import HttpResponseRedirect
from django.shortcuts import render, redirect
from django.template import RequestContext
from django.views import View
from .forms import UserCreation
from django.contrib import messages
from .models import Chat,ChatRoom
from django.contrib.auth.mixins import LoginRequiredMixin
from django.contrib.auth import logout
# Create your views here.
def home(req):
    return render(req, 'home.php', {})


def register(req):
    form = UserCreation(req.POST or None)
    if req.method == "POST" and form.is_valid():
        username = form.cleaned_data['username']
        form.save()
        return redirect('login')
    return render(req,'register.html',{'form':form})

class Room(LoginRequiredMixin, View):
    def get(self,request,room_name):
        room = ChatRoom.objects.filter(name=room_name).first()
        chats = []

        if room:
            chats = Chat.objects.filter(room=room)
        else:
            room = ChatRoom(name=room_name)
            room.save()

        return render(request,'room.html', {
        'room_name': room_name,
            'chats':chats
    })
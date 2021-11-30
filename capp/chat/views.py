from django.http import HttpResponseRedirect
from django.shortcuts import render, redirect
from django.template import RequestContext

from .forms import UserCreation
from django.contrib import messages
# Create your views here.
def home(req):
    return render(req, 'home.html', {})


def register(req):
    form = UserCreation(req.POST or None)
    if req.method == "POST" and form.is_valid():
        username = form.cleaned_data['username']
        form.save()
        return redirect('login')
    return render(req,'register.html',{'form':form})

def room(request, room_name):
    return render(request, 'chat/room.html', {
        'room_name': room_name
    })
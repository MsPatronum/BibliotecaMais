"""BibliotecaMais URL Configuration

The `urlpatterns` list routes URLs to views. For more information please see:
    https://docs.djangoproject.com/en/2.2/topics/http/urls/
Examples:
Function views
    1. Add an import:  from my_app import views
    2. Add a URL to urlpatterns:  path('', views.home, name='home')
Class-based views
    1. Add an import:  from other_app.views import Home
    2. Add a URL to urlpatterns:  path('', Home.as_view(), name='home')
Including another URLconf
    1. Import the include() function: from django.urls import include, path
    2. Add a URL to urlpatterns:  path('blog/', include('blog.urls'))
"""
from django.contrib import admin
from django.urls import path
from BiblioLivros import views
from django.conf.urls import include

urlpatterns = [
    #path('admin/', admin.site.urls),
    path('listar/', views.LivroListarView.as_view(), name='listar_livro_info'),
    path('criar/', views.LivroCriarView.as_view(), name='criar_livro_info'),
    path('editar/<int:id>', views.LivroEditarView.as_view(), name='editar_livro_info'),
]

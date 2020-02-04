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
from BiblioLivros import views as BLivros_views
from BiblioUsuarios import views as BUsuarios_views
from django.conf.urls import include
from django.views.generic.base import TemplateView

urlpatterns = [
    path('', TemplateView.as_view(template_name='login.html'), name='home'),
    # URLS BIBLIOLIVROS
    # URLS DE LOVROS
    path('criar_livro/', BLivros_views.LivroCriarView.as_view(), name='criar_livro_info'),
    path('listar_livro/', BLivros_views.LivroListarView.as_view(), name='listar_livro_info'),
    path('editar_livro/<int:pk>', BLivros_views.LivroEditarView.as_view(), name='editar_livro_info'),
    path('deletar_livro/<int:pk>', BLivros_views.LivroDeletarView.as_view(), name='deletar_livro_info'),
    # URLS DE AUTORES
    path('listar_autor/', BLivros_views.AutorListarView.as_view(), name='listar_autor_info'),
    path('criar_autor/', BLivros_views.AutorCriarView.as_view(), name='criar_autor_info'),
    path('editar_autor/<int:pk>', BLivros_views.AutorEditarView.as_view(), name='editar_autor_info'),
    path('deletar_autor/<int:pk>', BLivros_views.AutorDeletarView.as_view(), name='deletar_autor_info'),
    # URLS DE USUÁRIOS
    path('contas/', include('django.contrib.auth.urls'),),
    # URLS BIBLIOUSUARIOS
    path('signup/', BUsuarios_views.SignUp.as_view(), name='signup'),
]

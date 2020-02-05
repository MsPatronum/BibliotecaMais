from django.contrib.auth.models import AbstractUser
from django.db import models

# Create your models here.

class CustomUser(AbstractUser):
    pass
    # adicionando campos extras
    nome_usuario = models.CharField(
        max_length = 45
        )
    username_usuario = models.CharField(
        max_length = 45
        )
    email = models.CharField(
        max_length = 60
        )

    def __str__(self):
        return self.username
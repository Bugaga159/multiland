# -*- coding: utf-8 -*-
# Generated by Django 1.11.6 on 2017-10-08 13:27
from __future__ import unicode_literals

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('fiserpage', '0001_initial'),
    ]

    operations = [
        migrations.AlterField(
            model_name='nav_bar',
            name='description',
            field=models.TextField(default=0, max_length=30, verbose_name='Описание'),
        ),
    ]

# -*- coding: utf-8 -*-
# Generated by Django 1.9.4 on 2016-04-06 11:38
from __future__ import unicode_literals

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('schools', '0002_auto_20160406_1333'),
    ]

    operations = [
        migrations.AddField(
            model_name='school',
            name='picture',
            field=models.ImageField(default=2, upload_to='schools/school/displayPics/'),
            preserve_default=False,
        ),
    ]

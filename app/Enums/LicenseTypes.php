<?php

namespace App\Enums;

enum LicenseTypes: string
{
  case MONTHLY = "monthly";
  case YEARLY = "yearly";
  case LIFETIME = "lifetime";
}
<x-visitor-navigation
  :route="route('visitor')"
  active="visitor"
  menu-name="Visitor"
/>

<x-visitor-navigation
  :route="route('')"
  active="visitor/online"
  menu-name="Online"
/>

<x-visitor-navigation
  route=""
  active="visitor/banned"
  menu-name="Banned"
/>

<x-visitor-navigation
  route=""
  active="visitor/offline"
  menu-name="Offline"
/>

<x-visitor-navigation
  route=""
  active="visitor/device"
  menu-name="Device"
/>

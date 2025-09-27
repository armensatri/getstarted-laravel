<x-visitor-navigation
  :route="route('visitor')"
  active="visitor"
  menu-name="Visitor"
/>

<x-visitor-navigation
  :route="route('visitor.online')"
  active="visitor/online"
  menu-name="Online"
/>

<x-visitor-navigation
  :route="route('visitor.banned')"
  active="visitor/banned"
  menu-name="Banned"
/>

<x-visitor-navigation
  :route="route('visitor.offline')"
  active="visitor/offline"
  menu-name="Offline"
/>

<x-visitor-navigation
  :route="route('visitor.device')"
  active="visitor/device"
  menu-name="Device"
/>

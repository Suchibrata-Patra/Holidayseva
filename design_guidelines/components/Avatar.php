<?php
// Avatar Component Class
class Avatar {
    private $src;
    private $alt;
    private $size;
    private $name;
    private $initials;

    public function __construct($src = '', $alt = 'Avatar', $size = 'md') {
        $this->src = $src;
        $this->alt = $alt;
        $this->size = $size;
    }

    public function setName($name) {
        $this->name = $name;
        $this->initials = strtoupper(implode('', array_map(fn($n) => $n[0], explode(' ', $name))));
        return $this;
    }

    public function render() {
        if ($this->src) {
            return '<img class="airbnb-avatar airbnb-avatar--' . $this->size . '" src="' . htmlspecialchars($this->src) . '" alt="' . htmlspecialchars($this->alt) . '" />';
        } else {
            return '<div class="airbnb-avatar airbnb-avatar--' . $this->size . ' airbnb-avatar--initials">' . 
                   htmlspecialchars($this->initials ?? '?') . 
                   '</div>';
        }
    }

    public static function renderCSS() {
        return <<<'CSS'
<style>
/* ============================================================
   AVATAR COMPONENT - AIRBNB STYLE
   ============================================================ */

.airbnb-avatar {
    border-radius: 50%;
    object-fit: cover;
    background: #EBEBEB;
}

.airbnb-avatar--sm {
    width: 32px;
    height: 32px;
}

.airbnb-avatar--md {
    width: 48px;
    height: 48px;
}

.airbnb-avatar--lg {
    width: 64px;
    height: 64px;
}

.airbnb-avatar--xl {
    width: 80px;
    height: 80px;
}

.airbnb-avatar--initials {
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 600;
    color: white;
    background: linear-gradient(135deg, #FF385C, #E31C5F);
    font-size: 14px;
}

.airbnb-avatar--sm.airbnb-avatar--initials {
    font-size: 12px;
}

.airbnb-avatar--lg.airbnb-avatar--initials {
    font-size: 18px;
}

.airbnb-avatar--xl.airbnb-avatar--initials {
    font-size: 20px;
}
</style>
CSS;
    }
}
?>

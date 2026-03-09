<?php
// Badge Component Class
class Badge {
    private $text;
    private $variant;
    private $size;

    public function __construct($text = '', $variant = 'default', $size = 'md') {
        $this->text = $text;
        $this->variant = $variant;
        $this->size = $size;
    }

    public function render() {
        return '<span class="airbnb-badge airbnb-badge--' . $this->variant . ' airbnb-badge--' . $this->size . '">' . 
               htmlspecialchars($this->text) . 
               '</span>';
    }

    public static function renderCSS() {
        return <<<'CSS'
<style>
/* ============================================================
   BADGE COMPONENT - AIRBNB STYLE
   ============================================================ */

.airbnb-badge {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border-radius: 20px;
    font-weight: 600;
    white-space: nowrap;
}

/* ── Variants ── */

.airbnb-badge--default {
    background: #EBEBEB;
    color: #222222;
}

.airbnb-badge--primary {
    background: rgba(255, 56, 92, 0.12);
    color: #FF385C;
}

.airbnb-badge--success {
    background: rgba(0, 138, 5, 0.12);
    color: #008A05;
}

.airbnb-badge--warning {
    background: rgba(196, 85, 8, 0.12);
    color: #C45508;
}

.airbnb-badge--danger {
    background: rgba(193, 53, 21, 0.12);
    color: #C13515;
}

.airbnb-badge--info {
    background: rgba(0, 122, 184, 0.12);
    color: #007AB8;
}

/* ── Sizes ── */

.airbnb-badge--sm {
    padding: 4px 12px;
    font-size: 12px;
}

.airbnb-badge--md {
    padding: 6px 14px;
    font-size: 13px;
}

.airbnb-badge--lg {
    padding: 8px 16px;
    font-size: 14px;
}
</style>
CSS;
    }
}
?>

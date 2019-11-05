<?php
namespace Sebbmyr\ Teams\ Cards;
use Sebbmyr\ Teams\ AbstractCard as Card;
/**
 * Custom card for microsoft teams
 * Based on the Laraval integration, but without Laravel.
 */
class CustomCard extends Card {
    public function getMessage() {
        return [
            "@type" => "MessageCard",
            "@context" => "http://schema.org/extensions",
            "summary" => "Forge Card",
            "themeColor" => !empty($this->data['themeColor']) ? $this->data['themeColor'] : "0072C6",
            "title" => (isset($this->data["title"])?$this->data["title"]:""),
            "text" => (isset($this->data["text"])?$this->data["text"]:""),
            "sections" => [
                [
                    "activityTitle" => (isset($this->data["activityTitle"])?$this->data["activityTitle"]:""),
                    "activitySubtitle" => (isset($this->data["activitySubtitle"])?$this->data["activitySubtitle"]:""),
                    "activityImage" => (isset($this->data["activityImage"])?$this->data["activityImage"]:""),
                    "facts" => (isset($this->data["facts"])?$this->data["facts"]:""),
                ]
            ]
        ];
    }
}

<?php

namespace App\Enum;

enum QuizAttemptStatus: string {
    case IN_PROGRESS = 'in_progress';
    case SUBMITTED = 'submitted';
    case GRADED = 'graded';

     public function label(): string
    {
        return match($this) {
            self::IN_PROGRESS => 'In Progress',
            self::SUBMITTED => 'Submitted',
            self::GRADED => 'Graded',
        };
    }
    public static function options(): array
        {
            return array_map(fn($case) => [
                'label' => $case->label(),
                'value' => $case->value,
            ], self::cases());
        }

}

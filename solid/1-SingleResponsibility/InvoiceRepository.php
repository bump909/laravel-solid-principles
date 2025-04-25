<?php

namespace App\Repositories;

class InvoiceRepository
{
    public function store(array $data): array
    {
        // In a real app, this would persist to a database.
        return [
            'id' => rand(1000, 9999),
            'amount' => $data['amount'],
            'email' => $data['email'],
            'description' => $data['description'] ?? 'No description'
        ];
    }
}

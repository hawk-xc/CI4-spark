<?php

namespace App\Models;

use CodeIgniter\Model;

class TicketModel extends Model
{
    // protected $DBGroup          = 'default';
    protected $table            = 'ticket';
    protected $primaryKey       = 'ticket_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    // protected $protectFields    = true;
    protected $allowedFields    = ['contact_id', 'subject', 'type', 'status', 'description', 'created_at'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // Validation
    // protected $validationRules      = [];
    // protected $validationMessages   = [];
    // protected $skipValidation       = false;
    // protected $cleanValidationRules = true;

    // Callbacks
    // protected $allowCallbacks = true;
    // protected $beforeInsert   = [];
    // protected $afterInsert    = [];
    // protected $beforeUpdate   = [];
    // protected $afterUpdate    = [];
    // protected $beforeFind     = [];
    // protected $afterFind      = [];
    // protected $beforeDelete   = [];
    // protected $afterDelete    = [];

    public function searchData($query = null, $count = null, $type = null, $order_by = null, $status = null)
    {
        // Implement your search logic, for example:

        if (!isset($count)) {
            if (isset($type)) {
                if (isset($order_by)) {
                    if (isset($status)) {
                        if (isset($query)) {
                            return $this->join('contact', 'contact_id')->where('type', $type)->where('status', $status)->like('subject', $query)->orLike('contact.name', $query)->orLike('contact.phone', $query)->orderBy($order_by, 'asc')->paginate('5', 'ticket');
                        } else {
                            return $this->join('contact', 'contact_id')->where('type', $type)->where('status', $status)->orderBy($order_by, 'asc')->paginate('5', 'ticket');
                        }
                    } else {
                        if (isset($query)) {
                            return $this->join('contact', 'contact_id')->where('type', $type)->like('subject', $query)->orLike('contact.name', $query)->orLike('contact.phone', $query)->orderBy($order_by, 'asc')->paginate('5', 'ticket');
                        } else {
                            return $this->join('contact', 'contact_id')->where('type', $type)->orderBy($order_by, 'asc')->paginate('5', 'ticket');
                        }
                    }
                } else {
                    if (isset($status)) {
                        if (isset($query)) {
                            return $this->join('contact', 'contact_id')->where('type', $type)->where('status', $status)->like('subject', $query)->orLike('contact.name', $query)->orLike('contact.phone', $query)->paginate('5', 'ticket');
                        } else {
                            return $this->join('contact', 'contact_id')->where('type', $type)->where('status', $status)->paginate('5', 'ticket');
                        }
                    } else {
                        if (isset($query)) {
                            return $this->join('contact', 'contact_id')->where('type', $type)->like('subject', $query)->orLike('contact.name', $query)->orLike('contact.phone', $query)->paginate('5', 'ticket');
                        } else {
                            return $this->join('contact', 'contact_id')->where('type', $type)->paginate('5', 'ticket');
                        }
                    }
                }
            } else {
                if (isset($order_by)) {
                    if (isset($status)) {
                        if (isset($query)) {
                            return $this->join('contact', 'contact_id')->where('status', $status)->like('subject', $query)->orLike('contact.name', $query)->orLike('contact.phone', $query)->orderBy($order_by, 'asc')->paginate('5', 'ticket');
                        } else {
                            return $this->join('contact', 'contact_id')->where('status', $status)->orderBy($order_by, 'asc')->paginate('5', 'ticket');
                        }
                    } else {
                        if (isset($query)) {
                            return $this->join('contact', 'contact_id')->like('subject', $query)->orLike('contact.name', $query)->orLike('contact.phone', $query)->orderBy($order_by, 'asc')->paginate('5', 'ticket');
                        } else {
                            return $this->join('contact', 'contact_id')->orderBy($order_by, 'asc')->paginate('5', 'ticket');
                        }
                    }
                } else {
                    if (isset($status)) {
                        if (isset($query)) {
                            return $this->join('contact', 'contact_id')->where('status', $status)->like('subject', $query)->orLike('contact.name', $query)->orLike('contact.phone', $query)->paginate('5', 'ticket');
                        } else {
                            return $this->join('contact', 'contact_id')->where('status', $status)->paginate('5', 'ticket');
                        }
                    } else {
                        if (isset($query)) {
                            return $this->join('contact', 'contact_id')->like('subject', $query)->orLike('contact.name', $query)->orLike('contact.phone', $query)->paginate('5', 'ticket');
                        } else {
                            return $this->join('contact', 'contact_id')->paginate('5', 'ticket');
                        }
                    }
                }
            }
        } else {
            if (isset($type)) {
                if (isset($order_by)) {
                    if (isset($status)) {
                        if (isset($query)) {
                            return $this->join('contact', 'contact_id')->where('type', $type)->where('status', $status)->like('subject', $query)->orLike('contact.name', $query)->orLike('contact.phone', $query)->orderBy($order_by, 'asc')->paginate($count, 'ticket');
                        } else {
                            return $this->join('contact', 'contact_id')->where('type', $type)->where('status', $status)->orderBy($order_by, 'asc')->paginate($count, 'ticket');
                        }
                    } else {
                        if (isset($query)) {
                            return $this->join('contact', 'contact_id')->where('type', $type)->like('subject', $query)->orLike('contact.name', $query)->orLike('contact.phone', $query)->orderBy($order_by, 'asc')->paginate($count, 'ticket');
                        } else {
                            return $this->join('contact', 'contact_id')->where('type', $type)->orderBy($order_by, 'asc')->paginate($count, 'ticket');
                        }
                    }
                } else {
                    if (isset($status)) {
                        if (isset($query)) {
                            return $this->join('contact', 'contact_id')->where('type', $type)->where('status', $status)->like('subject', $query)->orLike('contact.name', $query)->orLike('contact.phone', $query)->paginate($count, 'ticket');
                        } else {
                            return $this->join('contact', 'contact_id')->where('type', $type)->where('status', $status)->paginate($count, 'ticket');
                        }
                    } else {
                        if (isset($query)) {
                            return $this->join('contact', 'contact_id')->where('type', $type)->like('subject', $query)->orLike('contact.name', $query)->orLike('contact.phone', $query)->paginate($count, 'ticket');
                        } else {
                            return $this->join('contact', 'contact_id')->where('type', $type)->paginate($count, 'ticket');
                        }
                    }
                }
            } else {
                if (isset($order_by)) {
                    if (isset($status)) {
                        if (isset($query)) {
                            return $this->join('contact', 'contact_id')->where('status', $status)->like('subject', $query)->orLike('contact.name', $query)->orLike('contact.phone', $query)->orderBy($order_by, 'asc')->paginate($count, 'ticket');
                        } else {
                            return $this->join('contact', 'contact_id')->where('status', $status)->orderBy($order_by, 'asc')->paginate($count, 'ticket');
                        }
                    } else {
                        if (isset($query)) {
                            return $this->join('contact', 'contact_id')->like('subject', $query)->orLike('contact.name', $query)->orLike('contact.phone', $query)->orderBy($order_by, 'asc')->paginate($count, 'ticket');
                        } else {
                            return $this->join('contact', 'contact_id')->orderBy($order_by, 'asc')->paginate($count, 'ticket');
                        }
                    }
                } else {
                    if (isset($status)) {
                        if (isset($query)) {
                            return $this->join('contact', 'contact_id')->where('status', $status)->like('subject', $query)->orLike('contact.name', $query)->orLike('contact.phone', $query)->paginate($count, 'ticket');
                        } else {
                            return $this->join('contact', 'contact_id')->where('status', $status)->paginate($count, 'ticket');
                        }
                    } else {
                        if (isset($query)) {
                            return $this->join('contact', 'contact_id')->like('subject', $query)->orLike('contact.name', $query)->orLike('contact.phone', $query)->paginate($count, 'ticket');
                        } else {
                            return $this->join('contact', 'contact_id')->paginate($count, 'ticket');
                        }
                    }
                }
            }
        }
    }
}

<?php

namespace CreditSafe\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use CreditSafe\API\Runtime\Normalizer\CheckArray;
use CreditSafe\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class GbCompanyReportExampleResponseReportPaymentDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportPaymentData';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportPaymentData';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportPaymentData();
            if (\array_key_exists('paymentsOnFile', $data) && \is_int($data['paymentsOnFile'])) {
                $data['paymentsOnFile'] = (double) $data['paymentsOnFile'];
            }
            if (\array_key_exists('paymentsOnTime', $data) && \is_int($data['paymentsOnTime'])) {
                $data['paymentsOnTime'] = (double) $data['paymentsOnTime'];
            }
            if (\array_key_exists('paymentsPaidLate', $data) && \is_int($data['paymentsPaidLate'])) {
                $data['paymentsPaidLate'] = (double) $data['paymentsPaidLate'];
            }
            if (\array_key_exists('paymentsSentLegal', $data) && \is_int($data['paymentsSentLegal'])) {
                $data['paymentsSentLegal'] = (double) $data['paymentsSentLegal'];
            }
            if (\array_key_exists('paymentsStillOwingLate', $data) && \is_int($data['paymentsStillOwingLate'])) {
                $data['paymentsStillOwingLate'] = (double) $data['paymentsStillOwingLate'];
            }
            if (\array_key_exists('paymentsPaid0to30Days', $data) && \is_int($data['paymentsPaid0to30Days'])) {
                $data['paymentsPaid0to30Days'] = (double) $data['paymentsPaid0to30Days'];
            }
            if (\array_key_exists('highestInvoiceValueOutstandingLate', $data) && \is_int($data['highestInvoiceValueOutstandingLate'])) {
                $data['highestInvoiceValueOutstandingLate'] = (double) $data['highestInvoiceValueOutstandingLate'];
            }
            if (\array_key_exists('paymentsPaid90DaysplusLate', $data) && \is_int($data['paymentsPaid90DaysplusLate'])) {
                $data['paymentsPaid90DaysplusLate'] = (double) $data['paymentsPaid90DaysplusLate'];
            }
            if (\array_key_exists('totalBalanceStillOwingLate', $data) && \is_int($data['totalBalanceStillOwingLate'])) {
                $data['totalBalanceStillOwingLate'] = (double) $data['totalBalanceStillOwingLate'];
            }
            if (\array_key_exists('dbt', $data) && \is_int($data['dbt'])) {
                $data['dbt'] = (double) $data['dbt'];
            }
            if (\array_key_exists('paymentsPaid61to90Days', $data) && \is_int($data['paymentsPaid61to90Days'])) {
                $data['paymentsPaid61to90Days'] = (double) $data['paymentsPaid61to90Days'];
            }
            if (\array_key_exists('totalBalanceStillOwing', $data) && \is_int($data['totalBalanceStillOwing'])) {
                $data['totalBalanceStillOwing'] = (double) $data['totalBalanceStillOwing'];
            }
            if (\array_key_exists('payments31to60DaysLate', $data) && \is_int($data['payments31to60DaysLate'])) {
                $data['payments31to60DaysLate'] = (double) $data['payments31to60DaysLate'];
            }
            if (\array_key_exists('payments61to90DaysLate', $data) && \is_int($data['payments61to90DaysLate'])) {
                $data['payments61to90DaysLate'] = (double) $data['payments61to90DaysLate'];
            }
            if (\array_key_exists('highestInvoiceValueOutstanding', $data) && \is_int($data['highestInvoiceValueOutstanding'])) {
                $data['highestInvoiceValueOutstanding'] = (double) $data['highestInvoiceValueOutstanding'];
            }
            if (\array_key_exists('paymentsStillOwing', $data) && \is_int($data['paymentsStillOwing'])) {
                $data['paymentsStillOwing'] = (double) $data['paymentsStillOwing'];
            }
            if (\array_key_exists('paymentsWithinTerms', $data) && \is_int($data['paymentsWithinTerms'])) {
                $data['paymentsWithinTerms'] = (double) $data['paymentsWithinTerms'];
            }
            if (\array_key_exists('payments0to30Dayslate', $data) && \is_int($data['payments0to30Dayslate'])) {
                $data['payments0to30Dayslate'] = (double) $data['payments0to30Dayslate'];
            }
            if (\array_key_exists('averageInvoiceValue', $data) && \is_int($data['averageInvoiceValue'])) {
                $data['averageInvoiceValue'] = (double) $data['averageInvoiceValue'];
            }
            if (\array_key_exists('paymentsPaid31to60Days', $data) && \is_int($data['paymentsPaid31to60Days'])) {
                $data['paymentsPaid31to60Days'] = (double) $data['paymentsPaid31to60Days'];
            }
            if (\array_key_exists('paymentsPaid90Daysplus', $data) && \is_int($data['paymentsPaid90Daysplus'])) {
                $data['paymentsPaid90Daysplus'] = (double) $data['paymentsPaid90Daysplus'];
            }
            if (\array_key_exists('totalInvoiceValues', $data) && \is_int($data['totalInvoiceValues'])) {
                $data['totalInvoiceValues'] = (double) $data['totalInvoiceValues'];
            }
            if (\array_key_exists('industryDBT', $data) && \is_int($data['industryDBT'])) {
                $data['industryDBT'] = (double) $data['industryDBT'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('paymentsOnFile', $data)) {
                $object->setPaymentsOnFile($data['paymentsOnFile']);
                unset($data['paymentsOnFile']);
            }
            if (\array_key_exists('paymentsOnTime', $data)) {
                $object->setPaymentsOnTime($data['paymentsOnTime']);
                unset($data['paymentsOnTime']);
            }
            if (\array_key_exists('paymentsPaidLate', $data)) {
                $object->setPaymentsPaidLate($data['paymentsPaidLate']);
                unset($data['paymentsPaidLate']);
            }
            if (\array_key_exists('paymentsSentLegal', $data)) {
                $object->setPaymentsSentLegal($data['paymentsSentLegal']);
                unset($data['paymentsSentLegal']);
            }
            if (\array_key_exists('paymentsStillOwingLate', $data)) {
                $object->setPaymentsStillOwingLate($data['paymentsStillOwingLate']);
                unset($data['paymentsStillOwingLate']);
            }
            if (\array_key_exists('paymentsPaid0to30Days', $data)) {
                $object->setPaymentsPaid0to30Days($data['paymentsPaid0to30Days']);
                unset($data['paymentsPaid0to30Days']);
            }
            if (\array_key_exists('highestInvoiceValueOutstandingLate', $data)) {
                $object->setHighestInvoiceValueOutstandingLate($data['highestInvoiceValueOutstandingLate']);
                unset($data['highestInvoiceValueOutstandingLate']);
            }
            if (\array_key_exists('paymentsPaid90DaysplusLate', $data)) {
                $object->setPaymentsPaid90DaysplusLate($data['paymentsPaid90DaysplusLate']);
                unset($data['paymentsPaid90DaysplusLate']);
            }
            if (\array_key_exists('totalBalanceStillOwingLate', $data)) {
                $object->setTotalBalanceStillOwingLate($data['totalBalanceStillOwingLate']);
                unset($data['totalBalanceStillOwingLate']);
            }
            if (\array_key_exists('dbt', $data)) {
                $object->setDbt($data['dbt']);
                unset($data['dbt']);
            }
            if (\array_key_exists('paymentsPaid61to90Days', $data)) {
                $object->setPaymentsPaid61to90Days($data['paymentsPaid61to90Days']);
                unset($data['paymentsPaid61to90Days']);
            }
            if (\array_key_exists('totalBalanceStillOwing', $data)) {
                $object->setTotalBalanceStillOwing($data['totalBalanceStillOwing']);
                unset($data['totalBalanceStillOwing']);
            }
            if (\array_key_exists('payments31to60DaysLate', $data)) {
                $object->setPayments31to60DaysLate($data['payments31to60DaysLate']);
                unset($data['payments31to60DaysLate']);
            }
            if (\array_key_exists('payments61to90DaysLate', $data)) {
                $object->setPayments61to90DaysLate($data['payments61to90DaysLate']);
                unset($data['payments61to90DaysLate']);
            }
            if (\array_key_exists('highestInvoiceValueOutstanding', $data)) {
                $object->setHighestInvoiceValueOutstanding($data['highestInvoiceValueOutstanding']);
                unset($data['highestInvoiceValueOutstanding']);
            }
            if (\array_key_exists('paymentsStillOwing', $data)) {
                $object->setPaymentsStillOwing($data['paymentsStillOwing']);
                unset($data['paymentsStillOwing']);
            }
            if (\array_key_exists('paymentsWithinTerms', $data)) {
                $object->setPaymentsWithinTerms($data['paymentsWithinTerms']);
                unset($data['paymentsWithinTerms']);
            }
            if (\array_key_exists('payments0to30Dayslate', $data)) {
                $object->setPayments0to30Dayslate($data['payments0to30Dayslate']);
                unset($data['payments0to30Dayslate']);
            }
            if (\array_key_exists('averageInvoiceValue', $data)) {
                $object->setAverageInvoiceValue($data['averageInvoiceValue']);
                unset($data['averageInvoiceValue']);
            }
            if (\array_key_exists('paymentsPaid31to60Days', $data)) {
                $object->setPaymentsPaid31to60Days($data['paymentsPaid31to60Days']);
                unset($data['paymentsPaid31to60Days']);
            }
            if (\array_key_exists('paymentsPaid90Daysplus', $data)) {
                $object->setPaymentsPaid90Daysplus($data['paymentsPaid90Daysplus']);
                unset($data['paymentsPaid90Daysplus']);
            }
            if (\array_key_exists('totalInvoiceValues', $data)) {
                $object->setTotalInvoiceValues($data['totalInvoiceValues']);
                unset($data['totalInvoiceValues']);
            }
            if (\array_key_exists('paymentTrend', $data)) {
                $object->setPaymentTrend($data['paymentTrend']);
                unset($data['paymentTrend']);
            }
            if (\array_key_exists('industryDBT', $data)) {
                $object->setIndustryDBT($data['industryDBT']);
                unset($data['industryDBT']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('paymentsOnFile') && null !== $object->getPaymentsOnFile()) {
                $data['paymentsOnFile'] = $object->getPaymentsOnFile();
            }
            if ($object->isInitialized('paymentsOnTime') && null !== $object->getPaymentsOnTime()) {
                $data['paymentsOnTime'] = $object->getPaymentsOnTime();
            }
            if ($object->isInitialized('paymentsPaidLate') && null !== $object->getPaymentsPaidLate()) {
                $data['paymentsPaidLate'] = $object->getPaymentsPaidLate();
            }
            if ($object->isInitialized('paymentsSentLegal') && null !== $object->getPaymentsSentLegal()) {
                $data['paymentsSentLegal'] = $object->getPaymentsSentLegal();
            }
            if ($object->isInitialized('paymentsStillOwingLate') && null !== $object->getPaymentsStillOwingLate()) {
                $data['paymentsStillOwingLate'] = $object->getPaymentsStillOwingLate();
            }
            if ($object->isInitialized('paymentsPaid0to30Days') && null !== $object->getPaymentsPaid0to30Days()) {
                $data['paymentsPaid0to30Days'] = $object->getPaymentsPaid0to30Days();
            }
            if ($object->isInitialized('highestInvoiceValueOutstandingLate') && null !== $object->getHighestInvoiceValueOutstandingLate()) {
                $data['highestInvoiceValueOutstandingLate'] = $object->getHighestInvoiceValueOutstandingLate();
            }
            if ($object->isInitialized('paymentsPaid90DaysplusLate') && null !== $object->getPaymentsPaid90DaysplusLate()) {
                $data['paymentsPaid90DaysplusLate'] = $object->getPaymentsPaid90DaysplusLate();
            }
            if ($object->isInitialized('totalBalanceStillOwingLate') && null !== $object->getTotalBalanceStillOwingLate()) {
                $data['totalBalanceStillOwingLate'] = $object->getTotalBalanceStillOwingLate();
            }
            if ($object->isInitialized('dbt') && null !== $object->getDbt()) {
                $data['dbt'] = $object->getDbt();
            }
            if ($object->isInitialized('paymentsPaid61to90Days') && null !== $object->getPaymentsPaid61to90Days()) {
                $data['paymentsPaid61to90Days'] = $object->getPaymentsPaid61to90Days();
            }
            if ($object->isInitialized('totalBalanceStillOwing') && null !== $object->getTotalBalanceStillOwing()) {
                $data['totalBalanceStillOwing'] = $object->getTotalBalanceStillOwing();
            }
            if ($object->isInitialized('payments31to60DaysLate') && null !== $object->getPayments31to60DaysLate()) {
                $data['payments31to60DaysLate'] = $object->getPayments31to60DaysLate();
            }
            if ($object->isInitialized('payments61to90DaysLate') && null !== $object->getPayments61to90DaysLate()) {
                $data['payments61to90DaysLate'] = $object->getPayments61to90DaysLate();
            }
            if ($object->isInitialized('highestInvoiceValueOutstanding') && null !== $object->getHighestInvoiceValueOutstanding()) {
                $data['highestInvoiceValueOutstanding'] = $object->getHighestInvoiceValueOutstanding();
            }
            if ($object->isInitialized('paymentsStillOwing') && null !== $object->getPaymentsStillOwing()) {
                $data['paymentsStillOwing'] = $object->getPaymentsStillOwing();
            }
            if ($object->isInitialized('paymentsWithinTerms') && null !== $object->getPaymentsWithinTerms()) {
                $data['paymentsWithinTerms'] = $object->getPaymentsWithinTerms();
            }
            if ($object->isInitialized('payments0to30Dayslate') && null !== $object->getPayments0to30Dayslate()) {
                $data['payments0to30Dayslate'] = $object->getPayments0to30Dayslate();
            }
            if ($object->isInitialized('averageInvoiceValue') && null !== $object->getAverageInvoiceValue()) {
                $data['averageInvoiceValue'] = $object->getAverageInvoiceValue();
            }
            if ($object->isInitialized('paymentsPaid31to60Days') && null !== $object->getPaymentsPaid31to60Days()) {
                $data['paymentsPaid31to60Days'] = $object->getPaymentsPaid31to60Days();
            }
            if ($object->isInitialized('paymentsPaid90Daysplus') && null !== $object->getPaymentsPaid90Daysplus()) {
                $data['paymentsPaid90Daysplus'] = $object->getPaymentsPaid90Daysplus();
            }
            if ($object->isInitialized('totalInvoiceValues') && null !== $object->getTotalInvoiceValues()) {
                $data['totalInvoiceValues'] = $object->getTotalInvoiceValues();
            }
            if ($object->isInitialized('paymentTrend') && null !== $object->getPaymentTrend()) {
                $data['paymentTrend'] = $object->getPaymentTrend();
            }
            if ($object->isInitialized('industryDBT') && null !== $object->getIndustryDBT()) {
                $data['industryDBT'] = $object->getIndustryDBT();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportPaymentData' => false];
        }
    }
} else {
    class GbCompanyReportExampleResponseReportPaymentDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportPaymentData';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportPaymentData';
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportPaymentData();
            if (\array_key_exists('paymentsOnFile', $data) && \is_int($data['paymentsOnFile'])) {
                $data['paymentsOnFile'] = (double) $data['paymentsOnFile'];
            }
            if (\array_key_exists('paymentsOnTime', $data) && \is_int($data['paymentsOnTime'])) {
                $data['paymentsOnTime'] = (double) $data['paymentsOnTime'];
            }
            if (\array_key_exists('paymentsPaidLate', $data) && \is_int($data['paymentsPaidLate'])) {
                $data['paymentsPaidLate'] = (double) $data['paymentsPaidLate'];
            }
            if (\array_key_exists('paymentsSentLegal', $data) && \is_int($data['paymentsSentLegal'])) {
                $data['paymentsSentLegal'] = (double) $data['paymentsSentLegal'];
            }
            if (\array_key_exists('paymentsStillOwingLate', $data) && \is_int($data['paymentsStillOwingLate'])) {
                $data['paymentsStillOwingLate'] = (double) $data['paymentsStillOwingLate'];
            }
            if (\array_key_exists('paymentsPaid0to30Days', $data) && \is_int($data['paymentsPaid0to30Days'])) {
                $data['paymentsPaid0to30Days'] = (double) $data['paymentsPaid0to30Days'];
            }
            if (\array_key_exists('highestInvoiceValueOutstandingLate', $data) && \is_int($data['highestInvoiceValueOutstandingLate'])) {
                $data['highestInvoiceValueOutstandingLate'] = (double) $data['highestInvoiceValueOutstandingLate'];
            }
            if (\array_key_exists('paymentsPaid90DaysplusLate', $data) && \is_int($data['paymentsPaid90DaysplusLate'])) {
                $data['paymentsPaid90DaysplusLate'] = (double) $data['paymentsPaid90DaysplusLate'];
            }
            if (\array_key_exists('totalBalanceStillOwingLate', $data) && \is_int($data['totalBalanceStillOwingLate'])) {
                $data['totalBalanceStillOwingLate'] = (double) $data['totalBalanceStillOwingLate'];
            }
            if (\array_key_exists('dbt', $data) && \is_int($data['dbt'])) {
                $data['dbt'] = (double) $data['dbt'];
            }
            if (\array_key_exists('paymentsPaid61to90Days', $data) && \is_int($data['paymentsPaid61to90Days'])) {
                $data['paymentsPaid61to90Days'] = (double) $data['paymentsPaid61to90Days'];
            }
            if (\array_key_exists('totalBalanceStillOwing', $data) && \is_int($data['totalBalanceStillOwing'])) {
                $data['totalBalanceStillOwing'] = (double) $data['totalBalanceStillOwing'];
            }
            if (\array_key_exists('payments31to60DaysLate', $data) && \is_int($data['payments31to60DaysLate'])) {
                $data['payments31to60DaysLate'] = (double) $data['payments31to60DaysLate'];
            }
            if (\array_key_exists('payments61to90DaysLate', $data) && \is_int($data['payments61to90DaysLate'])) {
                $data['payments61to90DaysLate'] = (double) $data['payments61to90DaysLate'];
            }
            if (\array_key_exists('highestInvoiceValueOutstanding', $data) && \is_int($data['highestInvoiceValueOutstanding'])) {
                $data['highestInvoiceValueOutstanding'] = (double) $data['highestInvoiceValueOutstanding'];
            }
            if (\array_key_exists('paymentsStillOwing', $data) && \is_int($data['paymentsStillOwing'])) {
                $data['paymentsStillOwing'] = (double) $data['paymentsStillOwing'];
            }
            if (\array_key_exists('paymentsWithinTerms', $data) && \is_int($data['paymentsWithinTerms'])) {
                $data['paymentsWithinTerms'] = (double) $data['paymentsWithinTerms'];
            }
            if (\array_key_exists('payments0to30Dayslate', $data) && \is_int($data['payments0to30Dayslate'])) {
                $data['payments0to30Dayslate'] = (double) $data['payments0to30Dayslate'];
            }
            if (\array_key_exists('averageInvoiceValue', $data) && \is_int($data['averageInvoiceValue'])) {
                $data['averageInvoiceValue'] = (double) $data['averageInvoiceValue'];
            }
            if (\array_key_exists('paymentsPaid31to60Days', $data) && \is_int($data['paymentsPaid31to60Days'])) {
                $data['paymentsPaid31to60Days'] = (double) $data['paymentsPaid31to60Days'];
            }
            if (\array_key_exists('paymentsPaid90Daysplus', $data) && \is_int($data['paymentsPaid90Daysplus'])) {
                $data['paymentsPaid90Daysplus'] = (double) $data['paymentsPaid90Daysplus'];
            }
            if (\array_key_exists('totalInvoiceValues', $data) && \is_int($data['totalInvoiceValues'])) {
                $data['totalInvoiceValues'] = (double) $data['totalInvoiceValues'];
            }
            if (\array_key_exists('industryDBT', $data) && \is_int($data['industryDBT'])) {
                $data['industryDBT'] = (double) $data['industryDBT'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('paymentsOnFile', $data)) {
                $object->setPaymentsOnFile($data['paymentsOnFile']);
                unset($data['paymentsOnFile']);
            }
            if (\array_key_exists('paymentsOnTime', $data)) {
                $object->setPaymentsOnTime($data['paymentsOnTime']);
                unset($data['paymentsOnTime']);
            }
            if (\array_key_exists('paymentsPaidLate', $data)) {
                $object->setPaymentsPaidLate($data['paymentsPaidLate']);
                unset($data['paymentsPaidLate']);
            }
            if (\array_key_exists('paymentsSentLegal', $data)) {
                $object->setPaymentsSentLegal($data['paymentsSentLegal']);
                unset($data['paymentsSentLegal']);
            }
            if (\array_key_exists('paymentsStillOwingLate', $data)) {
                $object->setPaymentsStillOwingLate($data['paymentsStillOwingLate']);
                unset($data['paymentsStillOwingLate']);
            }
            if (\array_key_exists('paymentsPaid0to30Days', $data)) {
                $object->setPaymentsPaid0to30Days($data['paymentsPaid0to30Days']);
                unset($data['paymentsPaid0to30Days']);
            }
            if (\array_key_exists('highestInvoiceValueOutstandingLate', $data)) {
                $object->setHighestInvoiceValueOutstandingLate($data['highestInvoiceValueOutstandingLate']);
                unset($data['highestInvoiceValueOutstandingLate']);
            }
            if (\array_key_exists('paymentsPaid90DaysplusLate', $data)) {
                $object->setPaymentsPaid90DaysplusLate($data['paymentsPaid90DaysplusLate']);
                unset($data['paymentsPaid90DaysplusLate']);
            }
            if (\array_key_exists('totalBalanceStillOwingLate', $data)) {
                $object->setTotalBalanceStillOwingLate($data['totalBalanceStillOwingLate']);
                unset($data['totalBalanceStillOwingLate']);
            }
            if (\array_key_exists('dbt', $data)) {
                $object->setDbt($data['dbt']);
                unset($data['dbt']);
            }
            if (\array_key_exists('paymentsPaid61to90Days', $data)) {
                $object->setPaymentsPaid61to90Days($data['paymentsPaid61to90Days']);
                unset($data['paymentsPaid61to90Days']);
            }
            if (\array_key_exists('totalBalanceStillOwing', $data)) {
                $object->setTotalBalanceStillOwing($data['totalBalanceStillOwing']);
                unset($data['totalBalanceStillOwing']);
            }
            if (\array_key_exists('payments31to60DaysLate', $data)) {
                $object->setPayments31to60DaysLate($data['payments31to60DaysLate']);
                unset($data['payments31to60DaysLate']);
            }
            if (\array_key_exists('payments61to90DaysLate', $data)) {
                $object->setPayments61to90DaysLate($data['payments61to90DaysLate']);
                unset($data['payments61to90DaysLate']);
            }
            if (\array_key_exists('highestInvoiceValueOutstanding', $data)) {
                $object->setHighestInvoiceValueOutstanding($data['highestInvoiceValueOutstanding']);
                unset($data['highestInvoiceValueOutstanding']);
            }
            if (\array_key_exists('paymentsStillOwing', $data)) {
                $object->setPaymentsStillOwing($data['paymentsStillOwing']);
                unset($data['paymentsStillOwing']);
            }
            if (\array_key_exists('paymentsWithinTerms', $data)) {
                $object->setPaymentsWithinTerms($data['paymentsWithinTerms']);
                unset($data['paymentsWithinTerms']);
            }
            if (\array_key_exists('payments0to30Dayslate', $data)) {
                $object->setPayments0to30Dayslate($data['payments0to30Dayslate']);
                unset($data['payments0to30Dayslate']);
            }
            if (\array_key_exists('averageInvoiceValue', $data)) {
                $object->setAverageInvoiceValue($data['averageInvoiceValue']);
                unset($data['averageInvoiceValue']);
            }
            if (\array_key_exists('paymentsPaid31to60Days', $data)) {
                $object->setPaymentsPaid31to60Days($data['paymentsPaid31to60Days']);
                unset($data['paymentsPaid31to60Days']);
            }
            if (\array_key_exists('paymentsPaid90Daysplus', $data)) {
                $object->setPaymentsPaid90Daysplus($data['paymentsPaid90Daysplus']);
                unset($data['paymentsPaid90Daysplus']);
            }
            if (\array_key_exists('totalInvoiceValues', $data)) {
                $object->setTotalInvoiceValues($data['totalInvoiceValues']);
                unset($data['totalInvoiceValues']);
            }
            if (\array_key_exists('paymentTrend', $data)) {
                $object->setPaymentTrend($data['paymentTrend']);
                unset($data['paymentTrend']);
            }
            if (\array_key_exists('industryDBT', $data)) {
                $object->setIndustryDBT($data['industryDBT']);
                unset($data['industryDBT']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('paymentsOnFile') && null !== $object->getPaymentsOnFile()) {
                $data['paymentsOnFile'] = $object->getPaymentsOnFile();
            }
            if ($object->isInitialized('paymentsOnTime') && null !== $object->getPaymentsOnTime()) {
                $data['paymentsOnTime'] = $object->getPaymentsOnTime();
            }
            if ($object->isInitialized('paymentsPaidLate') && null !== $object->getPaymentsPaidLate()) {
                $data['paymentsPaidLate'] = $object->getPaymentsPaidLate();
            }
            if ($object->isInitialized('paymentsSentLegal') && null !== $object->getPaymentsSentLegal()) {
                $data['paymentsSentLegal'] = $object->getPaymentsSentLegal();
            }
            if ($object->isInitialized('paymentsStillOwingLate') && null !== $object->getPaymentsStillOwingLate()) {
                $data['paymentsStillOwingLate'] = $object->getPaymentsStillOwingLate();
            }
            if ($object->isInitialized('paymentsPaid0to30Days') && null !== $object->getPaymentsPaid0to30Days()) {
                $data['paymentsPaid0to30Days'] = $object->getPaymentsPaid0to30Days();
            }
            if ($object->isInitialized('highestInvoiceValueOutstandingLate') && null !== $object->getHighestInvoiceValueOutstandingLate()) {
                $data['highestInvoiceValueOutstandingLate'] = $object->getHighestInvoiceValueOutstandingLate();
            }
            if ($object->isInitialized('paymentsPaid90DaysplusLate') && null !== $object->getPaymentsPaid90DaysplusLate()) {
                $data['paymentsPaid90DaysplusLate'] = $object->getPaymentsPaid90DaysplusLate();
            }
            if ($object->isInitialized('totalBalanceStillOwingLate') && null !== $object->getTotalBalanceStillOwingLate()) {
                $data['totalBalanceStillOwingLate'] = $object->getTotalBalanceStillOwingLate();
            }
            if ($object->isInitialized('dbt') && null !== $object->getDbt()) {
                $data['dbt'] = $object->getDbt();
            }
            if ($object->isInitialized('paymentsPaid61to90Days') && null !== $object->getPaymentsPaid61to90Days()) {
                $data['paymentsPaid61to90Days'] = $object->getPaymentsPaid61to90Days();
            }
            if ($object->isInitialized('totalBalanceStillOwing') && null !== $object->getTotalBalanceStillOwing()) {
                $data['totalBalanceStillOwing'] = $object->getTotalBalanceStillOwing();
            }
            if ($object->isInitialized('payments31to60DaysLate') && null !== $object->getPayments31to60DaysLate()) {
                $data['payments31to60DaysLate'] = $object->getPayments31to60DaysLate();
            }
            if ($object->isInitialized('payments61to90DaysLate') && null !== $object->getPayments61to90DaysLate()) {
                $data['payments61to90DaysLate'] = $object->getPayments61to90DaysLate();
            }
            if ($object->isInitialized('highestInvoiceValueOutstanding') && null !== $object->getHighestInvoiceValueOutstanding()) {
                $data['highestInvoiceValueOutstanding'] = $object->getHighestInvoiceValueOutstanding();
            }
            if ($object->isInitialized('paymentsStillOwing') && null !== $object->getPaymentsStillOwing()) {
                $data['paymentsStillOwing'] = $object->getPaymentsStillOwing();
            }
            if ($object->isInitialized('paymentsWithinTerms') && null !== $object->getPaymentsWithinTerms()) {
                $data['paymentsWithinTerms'] = $object->getPaymentsWithinTerms();
            }
            if ($object->isInitialized('payments0to30Dayslate') && null !== $object->getPayments0to30Dayslate()) {
                $data['payments0to30Dayslate'] = $object->getPayments0to30Dayslate();
            }
            if ($object->isInitialized('averageInvoiceValue') && null !== $object->getAverageInvoiceValue()) {
                $data['averageInvoiceValue'] = $object->getAverageInvoiceValue();
            }
            if ($object->isInitialized('paymentsPaid31to60Days') && null !== $object->getPaymentsPaid31to60Days()) {
                $data['paymentsPaid31to60Days'] = $object->getPaymentsPaid31to60Days();
            }
            if ($object->isInitialized('paymentsPaid90Daysplus') && null !== $object->getPaymentsPaid90Daysplus()) {
                $data['paymentsPaid90Daysplus'] = $object->getPaymentsPaid90Daysplus();
            }
            if ($object->isInitialized('totalInvoiceValues') && null !== $object->getTotalInvoiceValues()) {
                $data['totalInvoiceValues'] = $object->getTotalInvoiceValues();
            }
            if ($object->isInitialized('paymentTrend') && null !== $object->getPaymentTrend()) {
                $data['paymentTrend'] = $object->getPaymentTrend();
            }
            if ($object->isInitialized('industryDBT') && null !== $object->getIndustryDBT()) {
                $data['industryDBT'] = $object->getIndustryDBT();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportPaymentData' => false];
        }
    }
}